class NewsCategoriesController < ApplicationController
  # GET /news_categories
  # GET /news_categories.xml
  def index
    @news_categories = NewsCategory.all

    respond_to do |format|
      format.html # index.html.erb
      format.xml  { render :xml => @news_categories }
    end
  end

  # GET /news_categories/1
  # GET /news_categories/1.xml
  def show
    @news_category = NewsCategory.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.xml  { render :xml => @news_category }
    end
  end

  # GET /news_categories/new
  # GET /news_categories/new.xml
  def new
    @news_category = NewsCategory.new

    respond_to do |format|
      format.html # new.html.erb
      format.xml  { render :xml => @news_category }
    end
  end

  # GET /news_categories/1/edit
  def edit
    @news_category = NewsCategory.find(params[:id])
  end

  # POST /news_categories
  # POST /news_categories.xml
  def create
    @news_category = NewsCategory.new(params[:news_category])

    respond_to do |format|
      if @news_category.save
        format.html { redirect_to(@news_category, :notice => 'News category was successfully created.') }
        format.xml  { render :xml => @news_category, :status => :created, :location => @news_category }
      else
        format.html { render :action => "new" }
        format.xml  { render :xml => @news_category.errors, :status => :unprocessable_entity }
      end
    end
  end

  # PUT /news_categories/1
  # PUT /news_categories/1.xml
  def update
    @news_category = NewsCategory.find(params[:id])

    respond_to do |format|
      if @news_category.update_attributes(params[:news_category])
        format.html { redirect_to(@news_category, :notice => 'News category was successfully updated.') }
        format.xml  { head :ok }
      else
        format.html { render :action => "edit" }
        format.xml  { render :xml => @news_category.errors, :status => :unprocessable_entity }
      end
    end
  end

  # DELETE /news_categories/1
  # DELETE /news_categories/1.xml
  def destroy
    @news_category = NewsCategory.find(params[:id])
    @news_category.destroy

    respond_to do |format|
      format.html { redirect_to(news_categories_url) }
      format.xml  { head :ok }
    end
  end
end
